<div id="multi-container">
    <div id="uploader">
        <div class="queueList">
            <div id="dndArea" class="placeholder">
                <div id="filePicker"></div>
                <p><?= Yii::t('webuploader', '或拖动图片到此') ?></p>
            </div>
        </div>
        <div class="statusBar" style="display:none;">
            <div class="progress">
                <span class="text">0%</span>
                <span class="percentage"></span>
            </div><div class="info"></div>
            <div class="btns">
                <div id="filePicker2"></div><div class="uploadBtn"><?= Yii::t('webuploader', '开始上传') ?></div>
            </div>
        </div>
    </div>
</div>
