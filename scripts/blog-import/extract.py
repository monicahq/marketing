import re, json, os, html

def strip_svg(s):
    return re.sub(r'<svg\b.*?</svg>', '', s, flags=re.S)

posts = {}
order = []

for p in range(1, 5):
    h = open(f'page{p}.html').read()
    h = strip_svg(h)
    for m in re.finditer(r'<article class="mb5">(.*?)</article>', h, re.S):
        a = m.group(1)
        t = re.search(r'<h2[^>]*><a href="([^"]+)">(.*?)</a></h2>', a, re.S)
        url, title = t.group(1), html.unescape(re.sub(r'<[^>]+>', '', t.group(2)).strip())
        meta = re.search(r'<ul class="pl0 f6 black-60 article-metadata">(.*?)</ul>', a, re.S).group(1)
        lis = re.findall(r'<li class="di[^"]*">(.*?)</li>', meta, re.S)
        date = html.unescape(re.sub(r'<[^>]+>', '', lis[0])).strip()
        category = category_url = None
        if len(lis) > 1:
            c = re.search(r'<a href="([^"]+)">(.*?)</a>', lis[1], re.S)
            if c:
                category_url, category = c.group(1), html.unescape(c.group(2).strip())
        body = a[re.search(r'</ul>', a[a.find('article-metadata'):]).end() + a.find('article-metadata'):].strip()
        slug = url.rsplit('/', 1)[-1]
        posts[slug] = dict(slug=slug, url=url, title=title, date_human=date,
                           category=category, category_url=category_url,
                           body_html=body, index_page=p)
        order.append(slug)

# enrich from individual post pages
for slug, d in posts.items():
    f = f'posts/{slug}.html'
    if not os.path.exists(f):
        d['missing_post_page'] = True
        continue
    h = open(f).read()
    def og(prop):
        m = re.search(r'<meta property="%s" content="([^"]*)"' % re.escape(prop), h)
        return html.unescape(m.group(1)) if m else None
    d['og_title'] = og('og:title')
    d['description'] = og('og:description')
    d['published'] = og('article:published_time')
    d['og_image'] = og('og:image')

# images referenced in bodies
imgs = set()
for d in posts.values():
    for m in re.finditer(r'<img[^>]+src="([^"]+)"', d['body_html']):
        imgs.add(m.group(1))
    if d.get('og_image'):
        imgs.add(d['og_image'])

json.dump(dict(order=order, posts=posts, images=sorted(imgs)), open('blog.json', 'w'), indent=2)
print(f'{len(posts)} posts, {len(imgs)} images')
missing = [s for s, d in posts.items() if not d.get('published')]
print('no published date:', missing)
print('no category:', [s for s, d in posts.items() if not d['category']])
