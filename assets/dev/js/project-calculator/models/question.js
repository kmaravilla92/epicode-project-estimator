export default class QuestionModel {
  constructor(question) {
    this.question = question.question;
    this.multiple_answers = question.multiple_answers;
    this.add_subtitle = question.add_subtitle;
    this.help = question.help;
    this.answers = question.answers;
  }

  isAnswerAsSubtitle() {
    return this.add_subtitle;
  }
}
