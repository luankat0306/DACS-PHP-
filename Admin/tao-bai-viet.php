            <div class="button-group">
                <div class="btn-post active">
                    <a href="?tab=tao-bai-viet">Thêm Bài Viết</a>
                </div>

                <div class="btn-post">
                    <a href="?tab=bai-viet">QL Bài Viết</a>
                </div>
               
			</div>

			<div class="post-content">
				<form action="tao-bai-viet.html">
					<div class="post-title">
						<label >Tiêu Đề</label><br>
						<input type="text" name = "TieuDe">
					</div>
	
					<div class="post-textarea">
						<label>Nội dung</label><br><br>
						<textarea id = "noidung"></textarea>
					</div>
	
					<div class="button-group">
						<input class="btn-save" type="submit" value="Lưu">
					</div>
					
				</form>
			</div>
                         
        </div>
            
    </div>

    
    <script src="../js/script.js"></script>

    <script src="../ckeditor5/build/ckeditor.js"></script>
	<script>ClassicEditor
			.create( document.querySelector( '#noidung' ), {
				
				toolbar: {
					items: [
						'heading',
						'|',
						'bold',
						'italic',
						'link',
						'bulletedList',
						'numberedList',
						'|',
						'indent',
						'outdent',
						'|',
						'imageUpload',
						'blockQuote',
						'insertTable',
						'mediaEmbed',
						'undo',
						'redo'
					]
				},
				language: 'vi',
				image: {
					toolbar: [
						'imageTextAlternative',
						'imageStyle:full',
						'imageStyle:side'
					]
				},
				table: {
					contentToolbar: [
						'tableColumn',
						'tableRow',
						'mergeTableCells'
					]
				},
				licenseKey: '',
				
			} )
			.then( editor => {
				window.editor = editor;
		
				
				
				
			} )
			.catch( error => {
				console.error( 'Oops, something gone wrong!' );
				console.error( 'Please, report the following error in the https://github.com/ckeditor/ckeditor5 with the build id and the error stack trace:' );
				console.warn( 'Build id: rs0gvseiwuxl-8o65j7c6blw0' );
				console.error( error );
			} );
	</script>
</body>
</html>