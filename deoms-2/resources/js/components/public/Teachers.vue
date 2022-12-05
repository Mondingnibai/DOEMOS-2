<template> 
    <div class="tearchers-view">
        <div class="site-section">
            <div class="container">
                <div clas="row">
                    <table class="table">
                        <thead>
                            <tr>
                              <th></th>
                              <th>Teacher Name</th>
                              <th>Position</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="teacher in teachers">
                               <td class="text-center">
                                    <img src="images/deoms_logo.jpg" width="50"/>
                               </td>
                              <td> <strong> {{ teacher.name }} </strong></td>
                              <td> <strong> {{ teacher.position }} </strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {

    data() {
        return {
            teachers: [
                { name: 'MRS. LILIOSA S. PABILLON', position: 'SCHOOL PRINCIPAL'},
                { name: 'MRS. ROSELLE BAHAYAN', position: 'GRADE 7 EMERALD - ADVISER'},
                { name: 'MRS. MARICRIS CAMILLO', position: 'GRADE 8 NARRA - ADVISER'},
                { name: 'MRS. JENJEN U. RUIZ', position: 'GRADE 9 GARDENIA - ADVISER'},
                { name: 'MS. JOAN S. MONTO', position: 'GRADE 9 MARIGOLD - ADVISER'},
                { name: 'MS. JERALYN MAPULA', position: 'GRADE 10 QUEZON - ADVISER'},
                { name: 'MR. JAPET SUMALINOG', position: 'GRADE 10 MACAPAGAL - ADVISER'},
                { name: 'MR. NILGEN CASAS', position: 'GRADE 11 DUTERTE - ADVISER'},
                { name: 'MS. JEA SUGAROL', position: 'GRADE 11 AQUINO - ADVISER'},
                { name: 'MS. JEANEEKA KENA ORBASE', position: 'GRADE 12 OSMENA - ADVISER'}
            ]
        }
    }
}
</script>