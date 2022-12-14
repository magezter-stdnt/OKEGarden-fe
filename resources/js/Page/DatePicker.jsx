import React from 'react';

import ReactDOM from 'react-dom/client';        
import { DayPicker, Row } from 'react-day-picker';

import { format } from 'date-fns';
import { differenceInCalendarDays } from 'date-fns';
import 'react-day-picker/dist/style.css';

function isPastDate(date) {
  return differenceInCalendarDays(date, new Date()) < 0;
}

function OnlyFutureRow(props) {
  const isPastRow = props.dates.every(isPastDate);
  if (isPastRow) return <></>;
  return <Row {...props} />;
}


export default function DatePicker() {
  const [selected, setSelected] = React.useState(new Date());

  return (
      <DayPicker
      fromDate={new Date()}
      components={{ Row: OnlyFutureRow }}
      // hidden={isPastDate}
      // showOutsideDays
        mode="single"
        selected={selected}
        onSelect={setSelected}
        weekStartsOn={1}
        styles={{
          month : {color : '#64676A', margin:'1em', height: '720px', paddingTop:'20px'},
          caption: { color : 'black', marginBottom : '2em', fontSize : '0.8em'},
          head_cell : { color: 'black', textTransform : 'capitalize', fontSize : '1em', fontWeight : '600'},
          tbody : { fontWeight : '600'},
          cell : { padding : '4px'},
        }}
      />
  );
}

if(document.getElementById('date-picker')){
    ReactDOM.createRoot(document.getElementById('date-picker')).render(<DatePicker />);
};
