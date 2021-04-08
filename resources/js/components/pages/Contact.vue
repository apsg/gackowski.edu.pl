<template>
    <div class="card-inner contacts" id="contact-card">
        <div class="card-wrap">

            <div class="content contacts">
                <div class="title">Get in Touch</div>
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="info-list">
                            <ul>
                                <li><strong><i class="fa fa-envelope"></i> </strong> szymon@gackowski.edu.pl</li>
                                <li><strong><i class="fa fa-phone"></i></strong> +48 664 825 439</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

            <div class="content contacts">
                <div class="title">Contact Form</div>
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="contact_form">
                            <form ref="form" action="/contact" method="post" @submit.prevent="sendForm">
                                <div class="row">
                                    <div class="col col-sm-6 col-md-6 col-md-12" v-if="success">
                                        <div class="alert alert-success">
                                            <i class="fa fa-check-circle"></i> Message sent!
                                        </div>
                                    </div>
                                    <div class="col col-sm-6 col-md-6 col-md-12">
                                        <div class="group-val">
                                            <input v-model="name" required type="text" name="name"
                                                   placeholder="Full Name"/>
                                        </div>
                                    </div>
                                    <div class="col col-sm-6 col-md-6 col-md-12">
                                        <div class="group-val">
                                            <input v-model="email" required type="email" name="email"
                                                   placeholder="Email Address"/>
                                        </div>
                                    </div>
                                    <div class="col col-d-12 col-t-12 col-m-12">
                                        <div class="group-val">
                                            <textarea v-model="message" required name="message"
                                                      placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="align-left">
                                    <button class="button">
                                        <span class="text">Send Message</span>
                                        <span class="arrow"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name: "Contact",

    data() {
        return {
            name: '',
            email: '',
            message: '',
            success: false,
        }
    },

    methods: {
        sendForm(e) {
            this.success = false;
            axios.post(e.target.action, {
                name: this.name,
                email: this.email,
                message: this.message,
            }).then(r => {
                this.success = true;
                this.clear();
            });
        },

        clear() {
            this.name = '';
            this.email = '';
            this.message = '';
        }
    }
}
</script>

<style scoped>

</style>
