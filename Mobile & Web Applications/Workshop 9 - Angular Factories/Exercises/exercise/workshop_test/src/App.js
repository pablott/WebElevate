import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';


// PART 1: basic properties
function formatName(user) {
  return user.firstName + ' ' + user.lastName;
}

const user = {
  firstName: 'Harper',
  lastName: 'Perez'
};


function Welcome(props) {
  return <h1>Hello, {props.name}</h1>;
}


// PART 2: composition and inheritance
class Diet extends React.Component {
  render() {
    return <h1>{this.props.animal} eat {this.props.food}</h1>;
  }
}


function FancyBorder(props) {
  return (
    <div className={'FancyBorder FancyBorder-' + props.color}>

      {props.children}
    </div>
  );
}


function WelcomeDialog() {
  return (
    <FancyBorder color="red">
      <h1 className="Dialog-title">
        Welcome
      </h1>
      <p className="Dialog-message">
        Thank you for visiting our spacecraft!
      </p>
    </FancyBorder>
  );
}


function Contacts() {
  return (
    <div className="Contacts">
      Contacts <br />
      <Toggle />
    </div>
  );
}


function Chat() {
  return (
    <div className="Chat">
      Chat <br />
      <ActionLink />
    </div>
  );
}


function SplitPane(props) {
  return (
    <div className="SplitPane">
      <div className="SplitPane-left">
        {props.left}
      </div>
      <div className="SplitPane-right">
        {props.right}
      </div>
    </div>
  );
}

// PART 3: Event handler
function ActionLink() {
  function handleClick(e) {
    e.preventDefault();
    console.log('The link was clicked.');
  }

  return (
    <button href="#" onClick={handleClick}>
      Click me
    </button>
  );
}


class Toggle extends React.Component {
  constructor(props) {
    super(props);
    this.state = {isToggleOn: false};

    // This binding is necessary to make `this` work in the callback
    this.handleClick = this.handleClick.bind(this);
  }

  handleClick() {
    this.setState(prevState => ({
      isToggleOn: !prevState.isToggleOn
    }));
  }

  render() {
    return (
      <button onClick={this.handleClick}>
        {this.state.isToggleOn ? 'ON' : 'OFF'}
      </button>
    );
  }
}


// App
class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to React {formatName(user)}</h1>
        </header>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code> and save to reload.
        </p>
        <Welcome name="Sara"/>
        <Diet animal="cats" food="oranges"/>
        <Diet animal="spiders" food="bananas"/>

        <WelcomeDialog />

        <SplitPane
          left={
            <Contacts />
          }
          right={
            <Chat />
          } />
      </div>
    );
  }
}

export default App;
