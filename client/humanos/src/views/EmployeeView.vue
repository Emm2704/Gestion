
<!-- <template>
    <div>
      <EmployeeList />
    </div>
  </template> -->
  
  <!-- <script>
  import EmployeeList from '@/components/EmployeeList.vue';
import axios from 'axios'
  export default {
    name: 'empleados',
    data(){ 
        return{
            EmployeeList: []
        }
    },
    mounted() {
        axios
        .get('http://127.6.0.1:8000/api/empleados' )
        .then(response => (this.EmployeeList = response. data. EmployeeList))
    },
  }

</script> -->


  <!-- <script>
//   import EmployeeList from '../components/EmployeeList.vue';
  import EmployeeList from '@/components/EmployeeList.vue';
  export default {
    components: {
      EmployeeList
    }
  };
  </script> -->

  <template>
    <div>
      <EmployeeList />
    </div>
  </template>
  
  <script>
  import EmployeeList from '../components/EmployeeList.vue';
  
  export default {
    components: {
      EmployeeList
    }
  };
  </script>
  
  