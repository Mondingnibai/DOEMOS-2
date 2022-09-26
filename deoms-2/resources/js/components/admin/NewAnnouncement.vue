<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Add Announcement</h3>
                </div>
                <div class="card-body">
                    <div class="row successMessage" v-if="savingSuccessful">
                        <div class="col-md-12">
                            <div class="alert alert-success alert-dismissible">
                                <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
                                <h5><i class="icon fas fa-check"></i>Announcement Successfully Added!</h5>
                              </div>
                        </div>
                    </div>
                    <form ref="newAnnouncement" name="newAnnouncementForm" id="myForm" @submit.prevent="validateForm">
                    <div class="row errorMessage" v-if="errors.length > 0">
                        <div class="col-md-12">
                            <div class="alert alert-danger alert-dismissible" v-for="(error, key) in errors" :key="key">
                                <!-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button> -->
                                <h5><i class="icon fas fa-ban"></i> {{ error }}</h5>
                              </div>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Title <span style="color: red;">*</span></label>
                                <input type="text" class="form-control" name="title" v-model="form.title" placeholder="Title...">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Venue</label>
                                <input type="text" class="form-control" name="venue" v-model="form.venue"  placeholder="Venue...">
                            </div>
                        </div> -->
                    </div>
                    <div class="row">
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Date:</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" name="date" v-model="form.date" class="form-control datetimepicker-input"  data-target="#reservationdate">
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Time</label>
                                <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input type="text" name="time" v-model="form.time" class="form-control datetimepicker-input"  data-target="#timepicker">
                                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="row">   
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Details <span style="color: red;">*</span></label>
                                <textarea class="form-control" name="description" v-model="form.description" rows="3" placeholder="Annoucement Details..."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-block btn-outline-success btn-lg">Save</button>
                        </div>
                        <!-- <div class="col-md-6">
                            <button type="submit" class="btn btn-block btn-outline-danger btn-lg">Cancel</button>
                        </div> -->
                    </div>
                </form>
                </div>
                <div class="card-footer clearfix"></div>
            </div>
        </div>
    </div>    
</template>

<script>
    export default {
        name: 'add-announcement',
        data() {
            return {
              form: {
                title: '',
                venue: '',
                date: '',
                time: '',
                description: ''
              },
              errors: [],
              message: '',
              noError: false,
              savingSuccessful: false
            }
        },

        methods : {

            validateForm: function(e) {
                
                if(this.form.title && this.form.description) {
                    // create the new announcement
                    this.create();
                }

                this.errors = [];

                if(!this.form.title) {
                    this.errors.push('Announcement Title is Required');
                }

                if(!this.form.description) {
                    this.errors.push('Announcement Details is Required');
                }
                this.errorMessage();
                e.preventDefault();
            },
           
            create: function() {
                // Get form data
                var formData = new FormData(document.getElementById("myForm"));

                // Submit the form data to the api
                this.axios.post('create-announcement', formData)
                    .then( response => {
                        // this.noError = true;
                        this.savingSuccessful = true;
                        this.message = response.data.message;
                        this.successMessage();
                        this.resetForm();
                    })
                    .catch( error => {
                        console.log(error.response);
                    });
            },

            successMessage() {
                $('.successMessage').delay(1000).show();
                setTimeout(function() {
                    $('.successMessage').fadeOut('fast');
                    this.savingSuccessful = false;
                }, 1000);
            },

            errorMessage() {
                $('.errorMessage').delay(2000).show();
                setTimeout(function() {
                    $('.errorMessage').fadeOut('slow');
                }, 2000);
            },

            resetForm() {
                //Reset values
                this.form.title = "";
                this.form.description = "";
            }
        }
    }
</script>