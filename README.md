# Project-Owntweet-A-Stylish-Project-List-Builder


This project is a dynamic and visually appealing web page that showcases a list of projects. It uses HTML, CSS (with Tailwind CSS), and PHP to create a modern and responsive layout, with the project data loaded from a separate PHP file.

## Demo Link 🔗  
[Click here to try see demo](https://project.owntweet.com/)
## Features

-   **Dynamic Project Listing:** Project data (title, description, tags, links) are stored in `projects_data.php` and loaded dynamically into `index.php` using PHP.
-   **Stylish Design:**
    -   Uses a dark radial gradient background for a modern feel.
    -   Project cards have a subtle glow effect on hover.
    -   Uses a neon-style gradient for the heading.
    -   Cards have a transform effect on hover for a more dynamic look.
    -  Uses `Poppins` font
    - Uses `boxicons`
-   **Device-Friendly Layout:** Responsive grid layout that adapts well to different screen sizes.
-   **Multiple Link Options:** Supports GitHub links, live demo links (using a website icon), and general website URLs (using a world icon) for projects.
-   **Tag-Based Organization:** Projects are tagged, making it easier to categorize projects based on technology or type.
-   **Content Delivery Network (CDN):** Uses CDN links for external resources (Tailwind CSS, Boxicons, Google Fonts) for faster load times.
-   **PHP Templating:** Uses PHP to dynamically generate the HTML and for data management.

## Files Overview

-   `index.php`: The main HTML file that displays the project list. It uses PHP to include data and generate the HTML.
-   `projects_data.php`: A PHP file that stores all the project data (title, description, links, tags).
-   `README.md`: This file, explaining the project.

## Getting Started

1.  **Clone/Download:** Download or clone the files to your local machine.

2.  **PHP Environment:** Make sure you have a PHP environment set up. This project assumes basic PHP support.

3.  **Edit Project Data:**
    -   Open `projects_data.php` and modify the `$projects` array with your actual project details.
    -   Make sure the `githubUrl`, `demoUrl` `liveUrl`, `liveUrlType` and `websiteUrl` properties are filled for your projects and update as needed.

4.  **Open in Browser:** Open `index.php` in your web browser to view your project list.

## How to Customize

-   **Project Data:** Edit `projects_data.php` to add, remove, or modify your projects.
-   **Styling:** Modify the CSS within the `<style>` tags in `index.php` to customize the design further. You can use Tailwind classes to modify the look of your site.
-   **HTML Structure:** Modify the overall HTML structure in `index.php` if needed.

## Resources Used

-   **Tailwind CSS:** [https://tailwindcss.com/](https://tailwindcss.com/)
-   **Boxicons:** [https://boxicons.com/](https://boxicons.com/)
-   **Google Fonts:** [https://fonts.google.com/](https://fonts.google.com/)

## Notes

- This is a fully dynamic PHP based website with zero javascript.
-   The current project is not a real application, and doesn't have user authentication, data persistence, or other advanced features.
-   The data is stored in `projects_data.php` which is not a real database.
-   The project can be extended and integrated to real application as per needs.

## Contributing

If you have any suggestions or improvements, feel free to submit a pull request.

## License

This project is open-source.
