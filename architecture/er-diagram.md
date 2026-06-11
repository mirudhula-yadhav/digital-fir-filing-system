# Entity Relationship Diagram

## Users
- user_id
- full_name
- email
- password
- role

## FIR Reports
- fir_id
- user_id
- complaint_title
- complaint_description
- status

## Police Stations
- station_id
- station_name
- location

## Officers
- officer_id
- officer_name
- station_id

## Relationships

- One User can submit many FIR Reports.
- One Police Station can have many Officers.
- Officers review FIR Reports.
