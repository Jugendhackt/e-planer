export class User {
  public id: Number;
  public name: String;
  public email: String;
  public roles: Array<String>;

  constructor(data, roles) {
    this.id = data.id;
    this.name = data.name;
    this.email = data.email;
    this.roles = roles;
  }
}
