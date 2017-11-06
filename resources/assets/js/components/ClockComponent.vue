<template>
  <div class="row no-gutters align-items-center h-100">
    <div class="col-6 col-sm-5 col-lg-4">
      <span v-text="time" class="time"></span>
    </div>
    <div class="col-6 col-sm-5 col-lg-4 text-small line-height">
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
  div{
    font-style: italic;
  }
  .time{
    font-size: 2em; 
    font-weight: bold;
    padding: 5px 10px;
    font-style: normal;
  }
  .line-height{
    line-height: 16px;
  }
</style>
 