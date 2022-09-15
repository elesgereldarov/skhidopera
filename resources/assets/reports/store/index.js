import Vue from 'vue'
import Vuex from 'vuex'

import common from './modules/common'
import entry from './modules/entry'
import reportKasir from './modules/reportKasir'
import reportSeniorKasir from './modules/reportSeniorKasir'
import reportDistributors from './modules/reportDistributors'
import reportPriceCut from './modules/reportPriceCut'
import reportEvents from './modules/reportEvents'
import reportDetailed from './modules/reportDetailed'
import reports from './modules/reports'

Vue.use(Vuex)

export const store = new Vuex.Store({
  modules: {
    reports,
    common,
    entry,
    reportKasir,
    reportSeniorKasir,
    reportDistributors,
    reportPriceCut,
    reportEvents,
    reportDetailed
  }
})
