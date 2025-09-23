  <!-- enquiry popup start -->
    <div class="product-details-action d-flex flex-wrap align-items-center">
        <button class="rs-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" >
            Send To Enquiry
        </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="custom-modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Product Enquiry</h1>
                <button type="button" class="btn-close custom-modal-header-close-btn" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="custom-modal-body">
                <form>
                    <div class="mb-3">
                    <!-- <label for="recipient-name" class="col-form-label">Recipient:</label> -->
                    <input type="text" class="form-control custom-input" placeholder="Product name"  id="product-name" required >
                </div>
                <div class="mb-3">
                    <!-- <label for="recipient-name" class="col-form-label">Recipient:</label> -->
                    <input type="text" class="form-control custom-input" placeholder="Your Mobile/Email"  id="product-recipient-name" required >
                </div>
                <div class="mb-3">
                    <!-- <label for="message-text" class="col-form-label">Message:</label> -->
                    <textarea class="form-control"  placeholder="Plaese type your enquiry in details" id="product-message-text" required ></textarea>
                </div>
                </form>
            </div>
            <div class="custom-modal-footer">
                <!-- <button type="button" class="custom-button close-btn" data-bs-dismiss="modal">Close</button> -->
                <button type="button" class="custom-button msg-send-btn">Send message</button>
            </div>
            </div>
        </div>
    </div>
<!-- enquiry popup end -->