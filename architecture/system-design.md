# System Design

## Architecture Overview

The Digital FIR Filing System follows a three-tier architecture:

### Presentation Layer

- Angular Frontend
- Citizen Interface
- Police Interface
- Admin Interface

### Business Logic Layer

- Authentication
- FIR Processing
- Status Management
- Complaint Validation

### Data Layer

- MySQL Database
- FIR Records
- User Records
- Police Station Records

## Modules

### Citizen Module

- Register Complaint
- Track FIR Status
- View Complaint History

### Police Module

- Review Complaints
- Approve FIR Requests
- Update Investigation Status

### Admin Module

- Manage Users
- Manage Police Stations
- Generate Reports
