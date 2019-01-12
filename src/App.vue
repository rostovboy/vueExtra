<template>
    <div id="vueextra-panel-home-div" class="container">

        <div class="x-panel">
            <h2>{{$lexicon('vueextra')}}</h2>
        </div>

        <div class="x-panel-body x-panel-body-noheader">
            <div class="x-panel panel-desc">
                <div class="x-panel-body x-panel-body-noheader">{{$lexicon('vueextra_intro_msg')}}</div>
            </div>
            <div class="x-panel main-wrapper x-grid-panel">
                <div class="x-panel-bwrap">
                    {{message}}
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        name: 'vueextra-panel-home-div',
        data() {
            return {
                message: 'Hi Hi Hi'
            }
        }
    }
</script>
