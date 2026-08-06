import re, json, html, os

d = json.load(open('blog.json'))

# --- merge feed data (exact timestamp + author) keyed by title ---
feed = open('extra-feed.xml').read()
by_title = {}
for e in re.findall(r'<entry>(.*?)</entry>', feed, re.S):
    t = html.unescape(re.search(r'<title><!\[CDATA\[(.*?)\]\]></title>', e, re.S).group(1)).strip()
    by_title[t] = dict(
        author=re.search(r'<name><!\[CDATA\[(.*?)\]\]></name>', e, re.S).group(1),
        updated=re.search(r'<updated>(.*?)</updated>', e, re.S).group(1),
    )

for p in d['posts'].values():
    f = by_title.get(p['title'].strip())
    p['author'] = f['author'] if f else None
    p['updated'] = f['updated'] if f else None
    p['in_feed'] = f is not None

# --- HTML -> Markdown ---
def inline(s):
    s = re.sub(r'<a href="([^"]+)"[^>]*>(.*?)</a>', lambda m: f'[{inline(m.group(2))}]({m.group(1)})', s, flags=re.S)
    s = re.sub(r'<strong>(.*?)</strong>', r'**\1**', s, flags=re.S)
    s = re.sub(r'<em>(.*?)</em>', r'*\1*', s, flags=re.S)
    s = re.sub(r'<code>(.*?)</code>', r'`\1`', s, flags=re.S)
    s = re.sub(r'<img[^>]*src="([^"]*)"[^>]*alt="([^"]*)"[^>]*/?>', lambda m: f'![{m.group(2)}]({m.group(1)})', s)
    s = re.sub(r'<img[^>]*alt="([^"]*)"[^>]*src="([^"]*)"[^>]*/?>', lambda m: f'![{m.group(1)}]({m.group(2)})', s)
    s = re.sub(r'<[^>]+>', '', s)
    s = html.unescape(s)
    s = re.sub(r'<(?=[A-Za-z ])', r'\\<', s)
    return re.sub(r'[ \t]+', ' ', s).strip()

def to_md(h):
    out = []
    for m in re.finditer(r'<(p|h2|h3|ul)\b[^>]*>(.*?)</\1>', h, re.S):
        tag, body = m.group(1), m.group(2)
        if tag == 'ul':
            out.append('\n'.join('- ' + inline(li) for li in re.findall(r'<li>(.*?)</li>', body, re.S)))
        elif tag == 'h2':
            out.append('## ' + inline(body))
        elif tag == 'h3':
            out.append('### ' + inline(body))
        else:
            out.append(inline(body))
    return '\n\n'.join(x for x in out if x) + '\n'

def yq(s):
    return "'" + s.replace("'", "''") + "'"

os.makedirs('markdown', exist_ok=True)
CAT = {'New features': 'new-feature', 'Growing a company': 'growing'}

for slug in d['order']:
    p = d['posts'][slug]
    p['markdown'] = to_md(p['body_html'])
    fm = [
        '---',
        f"title: {yq(p['title'])}",
        f"slug: {slug}",
        f"date: {p['published']}",
        f"published_at: {p['updated']}",
        f"author: {yq(p['author'] or '')}",
        f"category: {CAT[p['category']]}",
        f"category_label: {yq(p['category'])}",
        f"description: {yq(p['description'] or '')}",
        f"original_url: {p['url']}",
        '---',
        '',
    ]
    open(f"markdown/{p['published']}-{slug}.md", 'w').write('\n'.join(fm) + p['markdown'])

json.dump(d, open('blog.json', 'w'), indent=2)
print(f"wrote {len(d['order'])} markdown files")
print('not in feed:', [s for s in d['order'] if not d['posts'][s]['in_feed']])
# leftover raw HTML in markdown?
leftover = {s: re.findall(r'<[a-zA-Z/][^>]*>', d['posts'][s]['markdown']) for s in d['order']}
leftover = {k: v for k, v in leftover.items() if v}
print('leftover html tags:', leftover)
