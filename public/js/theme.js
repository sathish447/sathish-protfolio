(() => {
    const themes = {
        light: { label: 'Light', colors: { '--bg': '#ffffff', '--text': '#1f2937', '--accent': '#2563eb' } },
        dark: { label: 'Dark', colors: { '--bg': '#1f2937', '--text': '#f3f4f6', '--accent': '#3b82f6' } },
        brown: { label: 'Brown', colors: { '--bg': '#efe8e3', '--text': '#4a291c', '--accent': '#8c6239' } },
        green: { label: 'Green', colors: { '--bg': '#ecfdf5', '--text': '#064e3b', '--accent': '#10b981' } },
        pink: { label: 'Pink', colors: { '--bg': '#fff1f2', '--text': '#831843', '--accent': '#db2777' } },
        neon: { label: 'Neon', colors: { '--bg': '#000000', '--text': '#ffffff', '--accent': '#38bdf8' } }
    };

    const applyTheme = (name) => {
        const root = document.documentElement;
        const themeEntry = themes[name] || themes.light;
        const theme = themeEntry.colors;
        Object.keys(theme).forEach(key => {
            root.style.setProperty(key, theme[key]);
        });
        localStorage.setItem('theme', name);
        document.getElementById('theme-icon').className = name === 'dark' ? 'fas fa-sun' : 'fas fa-moon';
    };

    // Toggle handler
    window.toggleTheme = () => {
        const current = localStorage.getItem('theme') || 'light';
        applyTheme(current === 'light' ? 'dark' : 'light');
    };

    // Build palette picker UI
    const panel = document.getElementById('palette-panel');
    if(panel){
        Object.entries(themes).forEach(([key, val]) => {
            const section = document.createElement('div');
            section.className = 'mb-4';
            const label = document.createElement('div');
            label.textContent = val.label.toUpperCase();
            label.className = 'text-xs font-semibold mb-2';
            section.appendChild(label);
            const row = document.createElement('div');
            row.className = 'flex space-x-2';
            ['--bg','--text','--accent'].forEach((c) => {
                const sw = document.createElement('button');
                sw.className = 'w-6 h-6 rounded focus:outline-none border';
                sw.style.backgroundColor = val.colors[c];
                sw.addEventListener('click', () => {
                    applyTheme(key);
                    panel.classList.add('hidden');
                });
                row.appendChild(sw);
            });
            section.appendChild(row);
            panel.appendChild(section);
        });
    }

    document.getElementById('palette-btn')?.addEventListener('click', () => {
        panel.classList.toggle('hidden');
    });

    // init
    applyTheme(localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'));
})();
