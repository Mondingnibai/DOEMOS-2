<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Announcement</h3>
                </div>
                <div class="card-body p-0">
                <table class="table table-striped">
                        <thead v-if="announcements.length > 0">
                            <tr>
                                <th style="width: 1%">#</th>
                                <th>Announcement Title</th>
                                <th>Announcement Details</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody v-if="announcements.length > 0">
                            <tr v-for="(announcement, key) in announcements" :key="key">
                                <td>#</td>
                                <td>{{ announcement.title }}</td>
                                <td>{{ announcement.description.substring(0,100) + '...' }}</td>
                                <!-- <td>{{ announcement.date }}:{{ announcement.time }}</td> -->
    
                                <td style="cursor:pointer" class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" :href= "'/admin/edit-announcement/' + announcement.id ">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                    </a>&nbsp;&nbsp;
                                    <a class="btn btn-danger btn-sm" href="#" @click="deleteAnnouncement(announcement.id)"> 
                                        <i class="fas fa-trash">
                                        </i>
                                        
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                        <tbody v-else>
                            <tr>
                                <td colspan="4" align="center" style="border:none">No Announcement.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix"></div>
            </div>
        </div>
    </div>
    
    </template>
    
    <script>
        export default  {
            name:"announcements",
            data() {
                return {
                    announcements:[]
                }
            }, 
    
            mounted() {
                // display all announcement
                this.getAnnouncement()
            },
    
            methods: {
                // get all announcement
                async getAnnouncement() {
                    await this.axios.get('get-all-announcement').then(response => {
                        this.announcements = response.data
                    }).catch( error => {
                        console.log(error.response)
                    })
                },
    
                async deleteAnnouncement(id) {
                    if(confirm("Are you sure to delete this announcement?")){
                        this.axios.delete(`delete-announcement/${id}`).then (response =>{
                            console.log(response);
                            location.reload();
    
                        }).catch(error => {
                            console.log(error.response)
                        })
                    }
                }
            }
        }
    </script>