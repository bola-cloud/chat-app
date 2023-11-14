<template>
    <div class="main-wrapper">
      <div class="container">
        <div class="page-content">
          <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 col-12 card-stacked">
                    <ChatsHeader/>
                </div>
                <div class="col-md-8 col-12 card-stacked">
                    <ChatContent/>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>

import ChatContent from './ChatContent.vue';
import ChatsHeader from './ChatsHeader.vue';


export default {
    components:{
        ChatsHeader,ChatsHeader
    }
}
</script>