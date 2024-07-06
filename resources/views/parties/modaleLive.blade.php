
<!-- Scrollable modal -->
<div class="modal fade" id="scrollableLive" tabindex="-1" aria-labelledby="scrollableLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollable">Nous sommes en live</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin: 5px;">
                <h3></h3>
                <div class="bg-img cover-background min-height-300" data-overlay-dark="0" data-background="{{ "storage/".$live->cover }}">
                    <div class="bg-black opacity-extra-medium"></div>
                    <div class="inner-border"></div>
                    <div class="text-center position-absolute top-50 start-50 translate-middle z-index-1">
                        <a class="popup-social-video video_btn" href="{{ $live->urlvideo }}">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
            </div>
        </div>
    </div>
</div>
