import React, { Component } from "react";

class Counter extends Component {
    state = {
        count:0,
        tags: []
    };

    renderTag(){
      if(this.state.tags.length === 0) return <p>Niestety, to nie jest lista.</p>;
      
      return <ul>
          { this.state.tags.map(tag => <li key={tag}>{tag}</li>)}
      </ul>
    }


  render() {

    return <div>
      {this.state.tags.length === 0 && 'we no'}
      {this.renderTag()}
      </div>;

  }

/*
  getBadgeClasses() {
    let classes = "badge m-2 bg-";
    classes += (this.state.count === 0) ? "warning" : "primary";
    return classes;
  }

  formatCount(){
      const {count} = this.state;
      return count === 0 ? 'Zero' : count;
  }
}
*/}
export default Counter;
