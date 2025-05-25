<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', '標題:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Intro Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('intro', '簡介:') !!}
    {!! Form::textarea('intro', null, ['class' => 'form-control', 'maxlength' => '100', 'id' => 'intro-textarea']) !!}
    <small class="form-text text-muted"><span id="intro-char-count">0</span>/100 字</small>
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', '封面:') !!}
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
        <label class="custom-file-label" for="image">Choose file</label>
    </div>
    <div class="img-preview-cover mt-2">
        @if ($catalog->image ?? null)
            <p for="">預覽</p>
            <img src="{{ env('APP_URL', 'https://cheng-yu168.com') . '/uploads/' . $catalog->image }}"
                style="max-width: 200px; max-height: 200px;">
        @endif
    </div>
</div>
<div class="clearfix"></div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', '檔案:') !!}
    <div class="input-group">
        <div class="custom-file">
            {!! Form::file('file', ['class' => 'custom-file-input', 'id' => 'file', 'accept' => 'application/pdf']) !!}
            {!! Form::label('file', 'Choose file', ['class' => 'custom-file-label']) !!}
        </div>
    </div>
    <div class="file-info mt-2">
        @if ($catalog->file ?? null)
            <p>已上傳檔案：<a href="{{ env('APP_URL', 'https://cheng-yu168.com') . '/uploads/' . $catalog->file }}" target="_blank">{{ $catalog->file }}</a></p>
        @endif
    </div>
</div>
<div class="clearfix"></div>

<!-- Views Field -->
{{-- <div class="form-group col-sm-6">
    {!! Form::label('views', 'Views:') !!}
    {!! Form::number('views', null, ['class' => 'form-control']) !!}
</div> --}}



@push('page_scripts')
<script>
    $(document).ready(function() {
        $(document).on('change', '#image', function () {
            let fileInput = this;
            let fileReader = new FileReader();

            fileReader.onload = function(e) {
                let previewHtml = `<p for="">預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
                $(fileInput).closest('.form-group').find('.img-preview-cover').html(previewHtml);
            };

            fileReader.readAsDataURL(fileInput.files[0]);
        });

        // 檔案選擇後更新標籤
        $(document).on('change', '#file', function() {
            let fileName = $(this).val().split('\\').pop();
            let fileExtension = fileName.split('.').pop().toLowerCase();

            // 驗證檔案是否為PDF
            if (fileExtension !== 'pdf') {
                alert('請只上傳PDF格式的檔案');
                $(this).val(''); // 清空選擇的檔案
                $(this).next('.custom-file-label').html('Choose PDF file');
                return;
            }

            $(this).next('.custom-file-label').html(fileName || 'Choose PDF file');
        });

        // Intro字數限制和計數功能
        $('#intro-textarea').on('input', function() {
            let maxLength = 100;
            let currentLength = $(this).val().length;

            // 更新字數計數
            $('#intro-char-count').text(currentLength);

            // 如果超過限制，截斷文字
            if (currentLength > maxLength) {
                $(this).val($(this).val().substring(0, maxLength));
                $('#intro-char-count').text(maxLength);
            }
        });

        // 頁面載入時先計算一次現有內容的字數
        if ($('#intro-textarea').length) {
            $('#intro-char-count').text($('#intro-textarea').val().length);
        }

        // $(document).on('change', '[id^="plan_style_"]', function () {
        //     let fileInput = this;
        //     let fileReader = new FileReader();
        //     let id = $(fileInput).attr('id'); // 獲取元素的ID
        //     let previewClass = `.img-preview-s${id.split('_').pop()}`; // 根據ID動態生成對應的預覽class

        //     fileReader.onload = function (e) {
        //         let previewHtml = `<p>預覽</p><img src="${e.target.result}" style="max-width: 200px; max-height: 200px;">`;
        //         $(fileInput).closest('.form-group').find(previewClass).html(previewHtml);
        //     };

        //     fileReader.readAsDataURL(fileInput.files[0]);
        // });
    });
</script>
@endpush
