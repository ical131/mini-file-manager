
import './bootstrap';

// Elements
const sidebar = document.getElementById('sidebar');
const sidebarToggle = document.getElementById('sidebar-toggle');
const sidebarOverlay = document.getElementById('sidebar-overlay');

// Open / Close Sidebar
if (sidebar && sidebarToggle && sidebarOverlay) {

    // Toggle sidebar with hamburger button
    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        sidebarOverlay.classList.toggle('hidden');
    });

    // Close sidebar when overlay is clicked
    sidebarOverlay.addEventListener('click', () => {
        sidebar.classList.add('-translate-x-full');
        sidebarOverlay.classList.add('hidden');
    });

    // Close sidebar when a navigation link is clicked
    const sidebarLinks = sidebar.querySelectorAll('nav a');

    sidebarLinks.forEach((link) => {
        link.addEventListener('click', () => {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        });
    });

}
