@include('partials.classification.styles')
<div class="modal fade" id="police2Modal" tabindex="-1" aria-labelledby="brimobLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered info-modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('images/Layer2.png') }}" style="width:18px; height:18px;">
            <h5 class="modal-title mb-0" id="brimobLabel">Provincial and Capital Public Security Headquarters</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body info-modal-body">
        <div class="police-info-section">
            <p class="p-modal text-justify"><strong>Command Level:</strong> Top territorial police command</p>
            <p class="p-modal text-justify"><strong>Typical Head Rank:</strong> Colonel</p>
            <p class="p-modal text-justify"><strong>Administrative Equivalent:</strong> Provincial or Vientiane Capital Level</p>
        </div>
        <div class="police-info-section">
            <p class="p-modal text-justify">
                Represents the highest territorial police command within each province or Vientiane Capital, directing all public security, criminal investigation, immigration, traffic, and specialized police activities under the authority of the MPS.
            </p>
        </div>
        <div class="police-info-section">
            <p><strong>Responsibilities:</strong></p>
            <ul>
                <li>Command all district public security headquarters within the province.</li>
                <li>Implement national public security policies and operational directives.</li>
                <li>Coordinate major criminal investigations.</li>
                <li>Direct provincial public order and emergency operations.</li>
                <li>Supervise immigration, traffic, and specialized police activities.</li>
                <li>Coordinate disaster response and public security contingencies.</li>
                <li>Maintain liaison with provincial authorities and the MPS.</li>
                <li>Manage personnel, logistics, and administrative support for subordinate units.</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
