document.addEventListener('DOMContentLoaded', () => {
    console.log('EduPlatform loaded.');

    // Simple interaction for architecture diagram
    const archDiagram = document.getElementById('arch-diagram');
    if (archDiagram) {
        archDiagram.innerHTML = `
            <h3>Interactive Diagram</h3>
            <p>Click components to see details:</p>
            <button onclick="alert('Frontend: Handles UI and User Interactions using HTML, CSS, JS')">Frontend</button>
            <button onclick="alert('Backend: Processes business logic using PHP')">PHP Backend</button>
            <button onclick="alert('Database: Stores user and course data')">Database</button>
        `;
    }
});

    // Stat Counters Animation
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200; // The lower the slower

    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.innerText;
                const inc = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + inc);
                    setTimeout(updateCount, 10);
                } else {
                    // Add comma to big numbers (e.g. 10000 -> 10,000)
                    counter.innerText = target.toLocaleString();
                }
            };
            updateCount();
        });
    }

    // Optional: Only trigger animation when stats section is in view
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const statsSection = document.querySelector('.stats-section');
    if (statsSection) {
        observer.observe(statsSection);
    }
