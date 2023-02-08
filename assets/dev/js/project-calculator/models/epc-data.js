export default class EPCDataModel {
  constructor(data) {
    this.calc_id = data.calc_id;
    this.services = data.services;
    this.hourly_rate = data.hourly_rate;
    this.initial_costs = data.initial_costs;

    this.modal_submission_id = data.modal_submission_id;
    this.modal_submission_thankyou_id = data.modal_submission_thankyou_id;
  }

  getServicesByInterval(interval) {
    if (interval in this.services) {
      return this.services[interval];
    }
    return null;
  }

  getServiceLabel(serviceKey, interval) {
    const servicesByInterval = this.getServicesByInterval(interval);
    if (serviceKey in servicesByInterval) {
      return servicesByInterval[serviceKey];
    }
    return '';
  }
}
