<template>
  <div class="row no-gutters align-items-center h-100">
    <div class="col-6 col-sm-5 col-lg-4">
      <span v-text="time" class="time"></span>
    </div>
    <div class="col-6 col-sm-5 col-lg-4 text-small">
      <small v-text="date"></small><br>
      <small v-text="day"></small>
    </div>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
      dateTime: moment().format()
    };
  },

  computed: {
      time(){
          return moment(this.dateTime).format('HH:mm');
      },
      date(){
          return moment(this.dateTime).format('MMMM D, YYYY');
      },
      day(){
          return moment(this.dateTime).format('dddd');
      },
      seconds(){
         return moment(this.dateTime).format('HH:mm::ss');
      }
  },

  mounted(){
      setInterval(this.updateTime, 1000);
  },

  methods: {
    updateTime(){
      this.dateTime  = moment().format();
    }
  }

};
</script>

<style scoped>
  div{
    font-style: italic;
  }
  .time{
    font-size: 2em; 
    font-weight: bold;
    padding: 5px 10px;
    font-style: normal;
  }
</style>
 