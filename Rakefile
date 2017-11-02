# Highly inspired by Octopress

## -- Rsync Deploy config -- ##
# Be sure your public key is listed in your server's ~/.ssh/authorized_keys file
ssh_user        = "deploy@172.104.145.15"
document_source = "~/htdocs/marketing/_site"
server_folder   = "/home/deploy/monica_blog"

#######################
# Create a new blog post #
#######################

desc "Create a new blog post"
task :create do
  return print "You need to specify ARTICLE environment variable as follow: rake create ARTICLE=3.5\n" unless ENV['ARTICLE']

  new_article = ENV["ARTICLE"]
  time = Time.new
  filename = time.year.to_s + "-" + time.strftime("%m") + "-" + time.day.to_s + "-" + new_article + ".md"

  #Generate the document
  doc = <<END
---
layout: post
title:
description:
date: YYYY-MM-DD
tags:
---

END
  File.open('_posts/' + filename, 'w') {|f| f.write(doc) }
end

#######################
# Working with Jekyll #
#######################

desc "Generate jekyll site"
task :generate do
  puts "## Generating Site with Jekyll"
  system "bundle exec jekyll build --config _config_dev.yml"
  system "bundle exec htmlproofer ./_site --disable-external"
end

desc "Serve jekyll site"
task :serve do
  puts "## Serving Site with Jekyll"
  system "bundle exec jekyll serve --config _config_dev.yml"
end

desc "list tasks"
task :list do
  puts "Tasks: #{(Rake::Task.tasks - [Rake::Task[:list]]).join(', ')}"
  puts "(type rake -T for more detail)\n\n"
end

desc "Check HTML"
task :check do
  puts "Checking the HTML"
  system "bundle exec htmlproofer ./_site --disable-external"
end

##############
# Deploying  #
##############

desc "Default deploy task"
task :deploy do
  puts "## About to deploy to production"
  puts ""
  puts "## Generating the site"
  # Rake::Task[:generate].execute
  system "jekyll build"
  puts "## Rsync in progress"
  system "rsync -arvuz -O --delete #{document_source} #{ssh_user}:#{server_folder} --exclude '.git'"
  puts "## Rsync complete. The website is up-to-date."
  Rake::Task[:purge].execute

end
