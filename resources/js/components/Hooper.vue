<template>
  <hooper>
    <slide>
        <img :src="'../storage/g1.webp'">
    </slide>
    <slide>
        <img :src="'../storage/g2.webp'">
    </slide>
    <slide>
        <img :src="'../storage/g3.webp'">
    </slide>
  </hooper>
</template>

<script>
import { Hooper, Slide } from 'hooper';
import 'hooper/dist/hooper.css';

export default {
  name: 'App',
  components: {
    Hooper,
    Slide
  }
};
</script>
