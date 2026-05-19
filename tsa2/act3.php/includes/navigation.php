<nav>
    <div class="logo">AM</div>
    <ul>
        <li><a href="#objective">Objective</a></li>
        <li><a href="#personal">Personal</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#certifications">Certifications</a></li>
        <li><a href="#affiliation">Affiliation</a></li>
        <li><a href="#experience">Experience</a></li>
    </ul>
</nav>

<script>
    const navLinks = document.querySelectorAll('nav ul li a');
    const sections = document.querySelectorAll('section[id]');

    function setActive() {
        let current = '';
        sections.forEach(section => {
            if (window.scrollY >= section.offsetTop - 80) {
                current = section.getAttribute('id');
            }
        });
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === '#' + current) {
                link.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', setActive);
    setActive();
</script>