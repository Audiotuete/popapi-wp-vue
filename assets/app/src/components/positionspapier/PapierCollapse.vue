<template>
    <div class="collapse collapse-item" :class="[{ 'is-active': active }, bereich]">
      <div class="collapse-header touchable" :class="[{ 'is-active': active }, bereich]" role="tab" @click.prevent="toggle">
        <slot  name="collapse-header"></slot>
      </div>
      <transition name="fade">
        <div class="collapse-content" :class="bereich" v-if="active">
          <div class="collapse-content-box" >
            <slot name="collapse-body"></slot>
          </div>
        </div>
      </transition>
    </div>
</template>

<script>
export default {
  name: 'papierCollapse',
  props: ['bereich'],
  data () {
    return {
      active: false
    }
  },
  methods: {
    toggle () {
      this.active = !this.active
      // if (this.active) {
      //   this.$emit('collapse-open', this.index)
      // }
    }
  }
}
</script>


<style lang="scss" scoped>

.collapse .collapse-header {
  color: #333;
  font-size: 1.3rem;
  padding: 20px 20px 20px 40px;
  border-width: 1.5px;
  border-top: 0;
  border-style: solid;
  background: #fff;
  position: relative;

}
.collapse .collapse-header > div {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.collapse .collapse-header h3{
  font-size: 1rem;
  font-weight: bold;
}
.collapse .collapse-header::before {
  transition: all .2s;
  content: "V";
  position: absolute;
  font-size: 0.4em;
  top: calc(50% - 0.4em);
  left: 20px;
  transform: rotate(-90deg);
}

.collapse.is-active .collapse-header::before {
  transform: rotate(0deg);
}
.collapse-header.is-active {
  border-bottom: none;
}

.collapse-content {
  border: 1.5px solid;
  border-top: none;
}

.collapse .collapse-content-box {
  color: #333;
  font-family: 'charterregular', Arial, sans-serif;
  transition: all .2s;
  padding: 0 2rem 1.5rem 2rem;

}
</style>
