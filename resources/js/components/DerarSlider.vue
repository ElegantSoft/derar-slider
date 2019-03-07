<template>
    <div>
        <div class="tab-pane" id="settings">
            <form class="form-horizontal" v-for="slider in sliders" style="border: 2px #ddd solid;">
                <div class="form-group">
                    <!--<p class="col-sm-2  ">السلايدر رقم {{slider.id}}</p>-->
                    <label :for="slider.id" class="col-sm-2 control-label pull-right">الصورة للسلايدر رقم {{slider.id}}</label>
                    <div class="col-sm-10">
                        <input type="file" @change="onFileChange(slider, $event)" class="form-control" :id="slider.id">
                    </div>
                </div>
                <div class="form-group" align="center">
                    <img class="form-control" style="height:200px; width:auto;" :src="slider.url" alt="">
                </div>


                <div class="form-group">
                    <label for="category_id" class="col-sm-2 control-label pull-right">القسم</label>

                    <div class="col-sm-10">
                        <select name="" id="category_id" v-model="slider.cat_id" class="form-control"

                        >
                            <option v-for="cat in categories" :value="cat.id">{{cat.name}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category_id" class="col-sm-2 control-label pull-right">حفظ سلايدر رقم {{slider.id}}</label>
                    <div class="col-sm-10">
                        <button type="button" @click="upload(slider)" class="btn btn-primary form-control">تحديث
                            السلايدر
                        </button>
                    </div>
                </div>

                <br>
                <br>
            </form>

        </div>



    </div>
</template>

<script>


    export default {
        data() {
            return {
                categories: {},
                sliders: {},

            }
        },
        beforeMount() {
            axios.get('https://derarstore.com/wp-json/wc/v2/products/categories?consumer_key=ck_8b23219c4e6476dd63aa246fc8fed52b582919d6&consumer_secret=cs_7a7d2dcf81cda68be6437f32f7bc9735d1ce0c43').then(
                (res) => {
                    this.categories = res.data
                }
            );
            axios.get('/derar-slider/public/sliders').then(
                (res) => {
                    this.sliders = res.data
                }
            )
        },
        methods: {
            onFileChange(slider, e) {
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createImage(slider, files[0]);
            },
            createImage(slider, file) {
                var image = new Image();
                var reader = new FileReader();

                reader.onload = (e) => {
                    slider.url = e.target.result;
                };
                reader.readAsDataURL(file);
            },
            upload(slider) {
                axios({
                    url: '/derar-slider/public/sliders/' + slider.id,
                    method: 'PUT',
                    data: {
                        cat_id: slider.cat_id,
                        url: slider.url
                    }
                }).then(
                    (res) => {
                        if (res.data.message === 'updated') {
                            alert('تم تحدث السلايدر')
                        }
                    }
                );
            }


        }
    }
</script>

<style scoped>

</style>