<template>
    <div class="home-page">
        <section class="second">
            <div class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                We Will let you know when we are ready
                                <p>
                                    Lorem ipsum dolor sit amet, mel eros lobortis ei.
                                    Pri te labore delicatissimi, autem aliquando ex nam, ne quo purto congue ullamcorper.
                                    Iudico ceteros interpretaris sed eu. Ancillae iudicabit vel te, no eum dico forensibus,
                                    nibh dicta ex pro. Cu eum fugit numquam adipisci,
                                    ei pro appetere phaedrum. Exerci iudicabit elaboraret ea quo,
                                    harum paulo pro ad, mei augue ubique scaevola ei.
                                </p>
                            </div>

                            <div class="col-xs-6 right">
                                <el-form :model="subscribeForm" ref="subscribeForm">
                                    <el-form-item prop="name">
                                        <el-input
                                                ref="name"
                                                placeholder="Your Name"
                                                v-model="subscribeForm.name">
                                        </el-input>
                                    </el-form-item>
                                    <el-form-item prop="email">
                                        <el-input
                                                ref="email"
                                                placeholder="Your Email"
                                                v-model="subscribeForm.email">
                                        </el-input>
                                    </el-form-item>
                                    <el-button type="primary">Keep me updated</el-button>
                                </el-form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="row">
                <div class="col-xs-6 left">
                    <p>
                        Safewave .inc<br/>
                        1505 Touraine Dr.<br/>
                        San Jose, CA 95118<br/>
                        USA<br/><br/>
                    </p>


                    &copy; 2018 safewave limited. all rights reserved.
                </div>
                <div class="col-xs-6 right">
                    <p>
                        Investor<br/>
                        investor@safewave.io
                    </p>
                    <p>
                        Career<br/>
                        career@safewave.io
                    </p>
                    <p>
                        Vendors<br/>
                        vendor@safewave.io
                    </p>
                </div>
            </div>
        </footer>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                subscribeForm: {
                    name: '',
                    email: '',
                }
            }
        },
      mounted() {
          console.log('Component mounted.')
      }
    }
</script>