@include('partials.classification.styles')
<div class="modal fade" id="police4Modal" tabindex="-1" aria-labelledby="level4Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered info-modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="d-flex align-items-center gap-2">
            <img src="{{ asset('images/Layer4.png') }}" style="width:18px; height:18px;">
            <h5 class="modal-title mb-0" id="level4Label">Local Police Station</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body info-modal-body">
        <div class="police-info-section">
            <p class="p-modal text-justify"><strong>Command Level:</strong> Frontline territorial police command</p>
            <p class="p-modal text-justify"><strong>Typical Head Rank:</strong> Major or Captain</p>
            <p class="p-modal text-justify"><strong>Administrative Equivalent:</strong> Municipality, Town, or Group of Villages Level</p>
        </div>
        <div class="police-info-section">
            <p class="p-modal text-justify">
                Provides day-to-day frontline policing, law enforcement, crime prevention, and community security services at the local level.
            </p>
        </div>
        <div class="police-info-section">
            <p><strong>Responsibilities:</strong></p>
            <ul>
                <li>Respond to emergency calls and public complaints.</li>
                <li>Conduct routine patrols.</li>
                <li>Prevent and investigate local crimes.</li>
                <li>Maintain public order.</li>
                <li>Enforce traffic and administrative regulations.</li>
                <li>Assist criminal investigations initiated by higher headquarters.</li>
                <li>Maintain community engagement and crime prevention activities.</li>
                <li>Support local government authorities during emergencies and public events.</li>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
