@once
<script>
document.addEventListener('DOMContentLoaded', function () {
    const medicalFacilityModals = [
        { id: 'level11Modal', prefix: 'puskesmas', role: 'PUSKESMAS Role' },
        { id: 'level33Modal', prefix: 'class-d', role: 'Class D Hospital Role' },
        { id: 'level44Modal', prefix: 'class-c', role: 'Class C Hospital Role' },
        { id: 'level55Modal', prefix: 'class-b', role: 'Class B Hospital Role' },
        { id: 'level66Modal', prefix: 'class-a', role: 'Class A Hospital Role' }
    ];

    medicalFacilityModals.forEach(function (facility) {
        const modal = document.getElementById(facility.id);
        const body = modal?.querySelector('.modal-body');

        if (!body || body.dataset.tabsInitialized === 'true') return;

        const dialog = modal.querySelector('.modal-dialog');
        dialog?.classList.add('info-modal-dialog');
        if (dialog) dialog.style.maxWidth = '';

        const sections = {
            overview: document.createDocumentFragment(),
            services: document.createDocumentFragment(),
            role: document.createDocumentFragment()
        };
        let currentSection = 'overview';

        Array.from(body.childNodes).forEach(function (node) {
            const explicitSection = node.dataset?.infoSection;
            if (explicitSection && sections[explicitSection]) {
                sections[explicitSection].appendChild(node);
                return;
            }

            const heading = (node.textContent || '').trim().replace(/\s+/g, ' ');

            if (/^Bed Capacity\b/i.test(heading)) currentSection = 'services';
            else if (/^Clinical Services\b/i.test(heading)) currentSection = 'services';
            else if (/^(?:Class [A-D] Hospital|Public Health Center \(PUSKESMAS\)) Role\b/i.test(heading)) currentSection = 'role';

            sections[currentSection].appendChild(node);
        });

        const tabs = [
            { key: 'overview', label: 'Overview' },
            { key: 'role', label: 'Role' },
            { key: 'services', label: 'Clinical Service' }
        ];
        const nav = document.createElement('ul');
        nav.className = 'nav nav-tabs info-modal-tabs px-3 pt-2';
        nav.id = facility.prefix + '-tab';
        nav.setAttribute('role', 'tablist');

        const tabContent = document.createElement('div');
        tabContent.className = 'tab-content info-modal-content';
        tabContent.id = facility.prefix + '-tab-content';

        tabs.forEach(function (tab, index) {
            const paneId = facility.prefix + '-' + tab.key;
            const buttonId = paneId + '-tab';
            const item = document.createElement('li');
            item.className = 'nav-item';
            item.setAttribute('role', 'presentation');
            item.innerHTML = `<button class="nav-link${index === 0 ? ' active' : ''}" id="${buttonId}" data-bs-toggle="tab" data-bs-target="#${paneId}" type="button" role="tab" aria-controls="${paneId}" aria-selected="${index === 0}">${tab.label}</button>`;
            nav.appendChild(item);

            const pane = document.createElement('div');
            pane.className = 'tab-pane fade' + (index === 0 ? ' show active' : '');
            pane.id = paneId;
            pane.setAttribute('role', 'tabpanel');
            pane.setAttribute('aria-labelledby', buttonId);
            pane.setAttribute('tabindex', '0');
            pane.appendChild(sections[tab.key]);
            tabContent.appendChild(pane);
        });

        body.before(nav);
        body.appendChild(tabContent);
        body.classList.add('info-modal-body');
        body.dataset.tabsInitialized = 'true';
    });
});
</script>
@endonce
