 {{-- 创建目录 --}}
<div class="modal fade" id="modal-folder-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/admin/upload/folder" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="folder" value="{{ $folder }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                    <h4 class="modal-title">新建文件夹</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="new_folder_name" class="col-sm-3 control-label">
                            文件夹名称
                        </label>
                        <div class="col-sm-8">
                            <input type="text" id="new_folder_name" name="new_folder" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        取消
                    </button>
                    <button type="submit" class="btn btn-primary">
                        新建文件夹
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- 删除文件 --}}
<div class="modal fade" id="modal-file-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    ×
                </button>
                <h4 class="modal-title">请确认</h4>
            </div>
            <div class="modal-body">
                <p class="lead">
                    <i class="fa fa-question-circle fa-lg"></i>
                    您确定要删除
                    <kbd><span id="delete-file-name1">文件</span></kbd>
                    文件?
                </p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="/admin/upload/file">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="folder" value="{{ $folder }}">
                    <input type="hidden" name="del_file" id="delete-file-name2">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        取消
                    </button>
                    <button type="submit" class="btn btn-danger">
                        删除
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- 删除目录 --}}
<div class="modal fade" id="modal-folder-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    ×
                </button>
                <h4 class="modal-title">请确认</h4>
            </div>
            <div class="modal-body">
                <p class="lead">
                    <i class="fa fa-question-circle fa-lg"></i>
                        您确定要删除
                        <kbd><span id="delete-folder-name1">文件夹</span></kbd>
                        文件夹?
                 </p>
            </div>
            <div class="modal-footer">
                <form method="POST" action="/admin/upload/folder">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="folder" value="{{ $folder }}">
                    <input type="hidden" name="del_folder" id="delete-folder-name2">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        取消
                    </button>
                    <button type="submit" class="btn btn-danger">
                        删除
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- 上传文件 --}}
<div class="modal fade" id="modal-file-upload">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="/admin/upload/file" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="folder" value="{{ $folder }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                    <h4 class="modal-title">上传新文件</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="file" class="col-sm-3 control-label">
                            文件
                        </label>
                        <div class="col-sm-8">
                            <input type="file" id="file" name="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file_name" class="col-sm-3 control-label">
                            重命名
                        </label>
                        <div class="col-sm-4">
                            <input type="text" id="file_name" name="file_name" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        取消上传
                    </button>
                    <button type="submit" class="btn btn-primary">
                        上传文件
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- 浏览图片 --}}
<div class="modal fade" id="modal-image-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    ×
                </button>
                <h4 class="modal-title">图像预览</h4>
            </div>
            <div class="modal-body">
                <img id="preview-image" src="x" class="img-responsive">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                    取消
                </button>
            </div>
        </div>
    </div>
</div>