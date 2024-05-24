// src/axios.js
import axios from 'axios';

const instance = axios.create({
  baseURL: 'http://localhost:8000' // URL del backend de Laravel
});

export default instance;
