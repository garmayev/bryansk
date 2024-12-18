<?php

use yii\web\View;


/**
 * @var View $this
 * @var string $result
 * @var string $feed
 */

$this->title = \Yii::t('backend', 'Import Feed');

$this->params['breadcrumbs'][] = ['label' => \Yii::t('backend', 'Feed'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

echo $result;

$this->registerJsVar('feed', $feed);

echo \yii\helpers\Html::submitButton(\Yii::t('backend', 'Start Import'), [
    'class' => 'btn btn-primary mr-3 mb-3',
    'id' => 'start'
]);

echo \yii\helpers\Html::tag("div", "", [
    'id' => 'result'
]);

?>

<script>
    async function upload(type, data, target) {
        let container = document.getElementById("result")
        container.insertAdjacentHTML('beforeend', `<p class="text-warning" data-key="${data.id}">${subKey} #${data.id} is loading...</p>`)
        return await fetch("/admin/feed/import-entry", {
            body: JSON.stringify({
                type: type,
                data: data,
                target: target
            }),
            method: "POST"
        }).then(response => response.json()).then(result => {
            return result;
        })
    }

    function callback(response) {
        let index = 0;
        let container = document.getElementById("result")
        container.innerHTML = "";
        Object.entries(response).forEach(entry => {
            const [key, value] = entry;
            Object.entries(value).forEach(item => {
                const [subKey, subValue] = item
                if (subKey === 'elements' || subKey === 'sections') {
                    Object.entries(subValue).forEach(a => {
                        upload(subKey, a[1], key).then(result => {
                            let b = document.querySelector(`[data-key='${result.data.id}']`);
                            b.classList.toggle('text-warning')
                            if (result.ok) {
                                b.classList.toggle('text-success')
                                b.innerHTML = `${subKey} #${result.data.id} is successfully loaded`
                                console.log()
                            } else {
                                b.classList.toggle('text-danger')
                                b.innerHTML = `${subKey} #${result.data.id} loading failed`
                            }
                        }).catch((error) => {
                            console.log(error);
                            container.insertAdjacentHTML('beforeend', `<p class="text-warning" data-key="${a[1].id}">${subKey} #${a[1].id} is loading...</p>`)
                            let b = document.querySelector(`[data-key='${a[1].id}']`);
                            b.classList.toggle('text-warning')
                            b.classList.toggle('text-danger')
                            b.innerHTML = `${subKey} #${a[1].id} loading failed`
                        })
                    })
                }
            })
        })
    }

    document.getElementById('start').addEventListener('click', () => {
        callback(JSON.parse(feed));
    })
</script>
