WP Smart Bookmark Pro
An advanced, production-ready WordPress plugin that enables users to bookmark posts, organize them into folders, view analytics, receive email digests, and use REST APIs.

Features
Add/Remove bookmarks with AJAX (no page reloads)

Bookmark folders UI for better organization

Admin analytics dashboard (top posts, active users, daily trends)

Weekly email digest using WP-Cron

REST API for developers and integrations

Clean uninstall process (removes all data)

Extensible architecture following WP coding standards

Shortcode
Place this shortcode anywhere in a page or post to render the user's bookmark list:

[wsb_bookmarks]
This will display:

All user bookmarks

Folder filter dropdown

Bookmark delete and edit buttons

REST API Endpoints
Method	Endpoint	Description	Authentication
GET	/wp-json/wsb/v1/bookmarks	Get current user bookmarks	Required
POST	/wp-json/wsb/v1/bookmarks	Add a bookmark	Required
DELETE	/wp-json/wsb/v1/bookmarks/{id}	Delete a bookmark by ID	Required

Authentication is handled via WordPress cookies or JWT (optional).

Admin Dashboard
Access via: WP Admin > Bookmarks Analytics

Includes:

Total bookmark count

Top bookmarked posts

Most active users

Bookmarking trend chart (daily/weekly)

Email Digest
Sends a weekly email summarizing user bookmarks

Powered by wp_schedule_event

Fully customizable via hooks and templates

Can be disabled or configured from the plugin settings

Installation
Download the ZIP or clone the repository

Upload the plugin to /wp-content/plugins/

Activate via WordPress Admin > Plugins

Folder Structure
wp-smart-bookmark-pro/
├── assets/
│   ├── js/
│   └── css/
├── includes/
│   ├── api.php
│   ├── shortcode.php
│   ├── functions.php
│   └── hooks.php
├── admin/
│   └── dashboard.php
├── templates/
│   ├── email-digest.php
│   └── bookmarks-ui.php
├── uninstall.php
├── wp-smart-bookmark-pro.php
Uninstall
The plugin will clean up all bookmarks and stored options upon deactivation and deletion.
To preserve data, you can comment out the uninstall logic in uninstall.php.

Developer Friendly
Modular and clean codebase

Namespaced classes

Action and filter hooks for extension

CSS and JS are properly enqueued using WP best practices

Compatible with most modern themes
