import React, { Component } from 'react'

class Counter extends Component {
    constructor (props){
        super(props)
        this.state = {
            count: 0
        }
    }
    increment(){
        this.setState((prevState, props) => ({
            count : prevState.count + 1
        }))
    }
  render() {
    return (
      <div>
        <div>Count = {this.state.count}</div>
        <button onClick={() => this.increment()}>Button Pressed</button>
      </div>
    )
  }
}

export default Counter