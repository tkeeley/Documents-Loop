# Documents Loop

**Version:** 2.0  
**Author:** Tim Keeley  
**Author URI:** [https://cupocode.com](https://cupocode.com)

## Overview

Documents Loop is a WordPress plugin that automatically loops through subfolders inside a designated `documents` folder and displays links to PDF and JPG files. The plugin provides a simple and organized way to present your documents on your site. When a visitor clicks on any file link, it will open in a new tab.

## Features

- **Easy Integration:** Use the `[documents_loop]` shortcode to display your document listings anywhere on your site.
- **Subfolder Scanning:** Automatically loops through all subdirectories inside the main `documents` folder.
- **File Filtering:** Displays only PDF and JPG files.
- **Clean Styling:** Includes simple CSS for a neat and organized presentation.
- **External Linking:** File links open in a new browser tab.

## Installation

1. **Upload Plugin Files:**
   - Download the plugin files.
   - Upload the entire `documents-loop` folder to the `/wp-content/plugins/` directory of your WordPress installation.

2. **Activate the Plugin:**
   - Log in to your WordPress admin dashboard.
   - Go to **Plugins > Installed Plugins**.
   - Find **Documents Loop** in the list and click **Activate**.

3. **Create the Documents Folder:**
   - Within the plugin’s folder (i.e., `/wp-content/plugins/documents-loop/`), create a folder named `documents`.
   - Inside the `documents` folder, create subfolders and add your PDF and JPG files.

## Usage

1. **Insert the Shortcode:**
   - Open the post or page where you want to display the documents.
   - Add the shortcode `[documents_loop]` in the content editor.

2. **View the Results:**
   - Publish or update the post/page.
   - Visit the page to see the documents listed by folder, with each file linked and set to open in a new tab.

## Customization

- **Styling:**
  - The plugin includes basic inline CSS for styling. To override or add custom styles, you can:
    - Use your theme’s CSS file.
    - Use the WordPress Customizer (under **Appearance > Customize > Additional CSS**).
- **File Types:**
  - By default, only PDF and JPG files are displayed. To modify or add file types, edit the `$extension` condition in the plugin’s code.

## Support

If you encounter any issues or have suggestions for improvements, please feel free to [contact me](https://yourwebsite.com).

## License

This plugin is released under the [GPL v2 or later](https://www.gnu.org/licenses/gpl-2.0.html).
