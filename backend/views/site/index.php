<?php

use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';

$this->registerJsVar('images', \common\models\Image::find()->all());
$this->registerJsVar('slides', \common\models\Slide::find()->all());
?>
    <div class="site-index">
    </div>

    <!-- Модальное окно -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Заголовок модального окна</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table>
                        <tbody id="tbody">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-primary">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </div>
<?php
$this->registerJs(<<<JS
    $('#upload-images').on('click', (e) => {
        e.preventDefault();
        for (const image of images ) {
            const exploded = image.src.split('/');
            if (exploded.length > 3) {
                $('#tbody').append(`
                <tr data-key="\${image.id}">
                    <td>\${image.id}</td>
                    <td>\${exploded[exploded.length - 1]}</td>
                    <td class="text-center">
                        <div class="spinner-border" role="status">
                            <span class="sr-only"></span>
                        </div>
                    </td>
                </tr>
                `);
                fetch(`/admin/feed/up?id=\${image.id}&filename=\${exploded[exploded.length - 1]}`).then(response => response.json()).then((response) => {
                    $(`[data-key="\${response.model.id}"] td:nth-child(3)`).html(response.icon)
                    console.log(response);
                })
            }
        }
        
        $('#exampleModal').modal('show');
    })
JS
);
