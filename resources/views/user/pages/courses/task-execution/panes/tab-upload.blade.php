<div class="card p-5 border-0" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);">
    <h4>Upload File</h4>
    <p>Upload file di bawah ini untuk mengumpulkan tugas</p>
    <div class="card card-body p-4 pb-2" style="border: 1px solid #9425FE; background-color: #F6EEFE;">
        <div class="d-flex align-items-center">
            <div class="p-2 bg-light-primary rounded-2 d-flex align-items-center justify-content-center me-2" style="background-color: #9425FE;">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 192 512">
                    <path fill="white" d="M20 424.229h20V279.771H20c-11.046 0-20-8.954-20-20V212c0-11.046 8.954-20 20-20h112c11.046 0 20 8.954 20 20v212.229h20c11.046 0 20 8.954 20 20V492c0 11.046-8.954 20-20 20H20c-11.046 0-20-8.954-20-20v-47.771c0-11.046 8.954-20 20-20M96 0C56.235 0 24 32.235 24 72s32.235 72 72 72s72-32.235 72-72S135.764 0 96 0" /></svg>
            </div>
            <h5 class="mt-1" style="color: #9425FE;">Informasi</h5>
        </div>
        <ul class="mt-2" style="color: #989898;">
            <li>Masukan tugas anda kedalam format ZIP sebelum mengirimkannya</li>
            <li>Pastikan berkas telah sesuai dengan ketentuan tugas</li>
            <li>Berkas yang tidak sesuai dengan ketentuan tugas berpotensi ditolak oleh riviewer</li>
        </ul>
    </div>

    <div id="formDropzone" class="form-group mb-4">
        <label class="form-label text-muted opacity-75 fw-medium" for="formImage">Image</label>
        <div class="dropzone-drag-area form-control d-flex align-items-center justify-content-center" id="previews">
            <div class="row align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
                    <g fill="none">
                        <path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                        <path fill="#9425FE" d="M8 9v2H5v9h14v-9h-3V9h3a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-9a2 2 0 0 1 2-2zm4.884-6.531l3.359 3.358a1 1 0 1 1-1.415 1.415L13 5.413V15a1 1 0 1 1-2 0V5.413L9.172 7.242a1 1 0 1 1-1.415-1.415l3.36-3.358a1.25 1.25 0 0 1 1.767 0" />
                    </g>
                </svg>
                <div class="dz-message text-muted opacity-50" data-dz-message>
                    <span class="mt-3">Drag file here to upload</span>
                </div>
                <div class="text-center">
                    <button id="filePicker" class="btn text-white mt-3" style="background-color: #9425FE;">Pilih File</button>
                </div>
            </div>
            <div class="d-none" id="dzPreviewContainer">
                <div class="dz-preview dz-file-preview">
                    <div class="dz-photo">
                        <img class="dz-thumbnail" data-dz-thumbnail>
                    </div>
                    <button class="dz-delete border-0 p-0" type="button" data-dz-remove>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="times">
                            <path fill="#FFFFFF" d="M13.41,12l4.3-4.29a1,1,0,1,0-1.42-1.42L12,10.59,7.71,6.29A1,1,0,0,0,6.29,7.71L10.59,12l-4.3,4.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l4.29,4.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="invalid-feedback fw-bold">Please upload an image.</div>
    </div>

    <div class="d-flex justify-content-end gap-3">
        <button type="button" class="outline-purple-primary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn text-white updateConfirmation" style="background-color: #7209DB;">Lanjut</button>
    </div>
</div>
