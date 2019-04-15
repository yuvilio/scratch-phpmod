const get = {
  ww: () => {
    let device = 'sp'
    if (window.innerWidth > 768) {
      device = 'pc'
    }
    return device
  },
  ua: () => {
    return window.navigator.userAgent.toLowerCase()
  },
  ver: () => {
    return window.navigator.appVersion.toLowerCase()
  }
}

export default get
