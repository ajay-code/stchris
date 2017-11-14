<template>
  <div class="row no-gutters align-items-center h-100">
    <div class="col-6 col-sm-6 col-md-4 col-lg-4 pl-1">
      <span v-text="time" class="time"></span>
    </div>
    <div class="col-6 col-sm-6 col-md-6 col-lg-6 date text-small line-height pl-2">
      <small v-text="day"></small><br>
      <small v-text="date"></small>
    </div>
  </div>
</template>

<script>


export default {
  data() {
    return {
      dateTime: moment().format(),
      tz : 'Asia/Qatar'
    };
  },

  computed: {
      time(){
          return moment(this.dateTime).tz(this.tz).format('HH:mm');
      },
      date(){
          return moment(this.dateTime).tz(this.tz).format('DD MMMM, YYYY');
      },
      day(){
          return moment(this.dateTime).tz(this.tz).format('dddd');
      },
      seconds(){
         return moment(this.dateTime).tz(this.tz).format('HH:mm::ss');
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
  .time{
    font-size: 36px; 
    font-weight: bold;
    padding: 5px 10px;
    font-style: normal;
  }
  .date{
    font-size: 18px;
  }
  .line-height{
    line-height: 16px;
  }
</style>
 