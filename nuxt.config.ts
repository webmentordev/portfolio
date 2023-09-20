// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: [
    '@nuxtjs/tailwindcss',
    'nuxt-icon'
  ],
  runtimeConfig: {
    'api': "https://api.ahmerdev.online",
    public: {
      'api': "https://api.ahmerdev.online"
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