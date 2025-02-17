import { defineConfig } from 'vite';

export default defineConfig({
  server: {
    host: '127.0.0.1',
    port: 5173,
    strictPort: true
  },
  build: {
    outDir: 'public/assets',
    emptyOutDir: true,
    manifest: true,
    rollupOptions: {
      input: 'src/js/index.js'
    }
  },
  css: {
    devSourcemap: true
  }
});
