// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    '@nuxtjs/tailwindcss',
    'nuxt-icon'
  ],
  runtimeConfig: {
    public: {
      'api': process.env.POCKETBASE_URL
    }
  },
  app: {
    head: {
      title: "Muhammad Ahmer Tahir — Portfolio",
      link: [
        {
          rel: "shortcut icon",
          href: "/favicon.png"
        }
      ]
    }
  }
})