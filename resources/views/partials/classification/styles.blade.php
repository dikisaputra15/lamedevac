@once
<style>
.info-modal-dialog {
    max-width: 1180px;
    width: 95vw;
}
.info-modal-dialog .modal-content {
    max-height: 88vh;
    border: none;
    border-radius: 10px;
    overflow: hidden;
}
.info-modal-dialog .modal-header {
    flex: 0 0 auto;
    background: #f8f9fa;
}

.info-modal-tabs {
    background: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
    flex: 0 0 auto;
    flex-wrap: nowrap;
    gap: 2px;
    overflow-x: auto;
}
.info-modal-tabs .nav-link {
    border: 1px solid transparent;
    border-bottom: none;
    border-radius: 6px 6px 0 0;
    color: #55606e;
    font-size: 13px;
    font-weight: 600;
    padding: 8px 14px;
    white-space: nowrap;
}
.info-modal-tabs .nav-link:hover {
    background: #eef2f7;
    color: #395272;
}
.info-modal-tabs .nav-link.active {
    background: #fff;
    color: #395272;
    border-color: #dee2e6 #dee2e6 #fff;
}
.info-modal-body {
    padding: 0;
    overflow: hidden;
    flex: 1 1 auto;
    min-height: 0;
}
#police1Modal .modal-body,
#police2Modal .modal-body,
#police3Modal .modal-body,
#police4Modal .modal-body {
    padding: 16px;
    overflow-y: auto;
    line-height: 1.3;
}
#police1Modal .modal-body p,
#police2Modal .modal-body p,
#police3Modal .modal-body p,
#police4Modal .modal-body p {
    margin: 0 0 8px;
    line-height: 1.3;
    text-align: left;
}
#police1Modal .police-info-section + .police-info-section,
#police2Modal .police-info-section + .police-info-section,
#police3Modal .police-info-section + .police-info-section,
#police4Modal .police-info-section + .police-info-section {
    margin-top: 0;
}
#police1Modal .police-info-section:nth-child(2) p + p,
#police2Modal .police-info-section:nth-child(2) p + p,
#police3Modal .police-info-section:nth-child(2) p + p,
#police4Modal .police-info-section:nth-child(2) p + p {
    margin-top: 16px;
    text-align: justify;
}
#police1Modal .modal-body ul,
#police2Modal .modal-body ul,
#police3Modal .modal-body ul,
#police4Modal .modal-body ul {
    padding-left: 40px;
    margin: 0;
}
#police1Modal .modal-body li,
#police2Modal .modal-body li,
#police3Modal .modal-body li,
#police4Modal .modal-body li {
    padding-left: 0;
    margin-bottom: 6px;
    line-height: 1.3;
}
#police1Modal .modal-body li:last-child,
#police2Modal .modal-body li:last-child,
#police3Modal .modal-body li:last-child,
#police4Modal .modal-body li:last-child {
    margin-bottom: 0;
}

#police2Modal .police-info-section:nth-child(2),
#police3Modal .police-info-section:nth-child(2),
#police4Modal .police-info-section:nth-child(2) {
    margin-top: 16px;
}

.info-modal-content {
    overflow-y: auto;
    padding: 18px 24px 24px 24px;
    min-height: 260px;
    max-height: calc(88vh - 120px);
}
.info-modal-content ul {
    padding-left: 20px;
    margin-bottom: 12px;
}
.info-modal-content ul li {
    margin-bottom: 6px;
    line-height: 20px;
    text-align: justify;
}
.info-modal-content ul ul {
    margin-top: 6px;
    margin-bottom: 4px;
    list-style-type: circle;
    padding-left: 20px;
}
.info-modal-content ul ul li {
    margin-bottom: 4px;
}
.info-modal-figure {
    margin-top: 14px;
    text-align: center;
}
.info-modal-figure img {
    display: inline-block;
    max-width: 100%;
    height: auto;
    border: 1px solid #e3e8ee;
    border-radius: 6px;
}
.info-modal-note {
    margin: 8px 0 4px 0;
    padding: 8px 12px;
    background: #f4f8fb;
    border-left: 3px solid #395272;
    border-radius: 4px;
    font-size: 12.5px;
    line-height: 19px;
    text-align: justify;
    color: #445060;
}

</style>
@endonce
