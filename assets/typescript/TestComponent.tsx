import * as React from 'react';
import {Component} from 'react';

export default class TestComponent extends Component {
    render() {
        return (
            <div className="test-component">
                {(new Date()).toDateString()}
            </div>
        );
    }
}
