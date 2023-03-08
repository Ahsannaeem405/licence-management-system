<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title>Department List</title>
    <meta content="text/html; charset=utf-8" http-equiv=Content-Type>
</head>
<body style="font-size: 10pt; font-family: Verdana, sans-serif;">
<table>
    <tbody>
        <tr>
            <td>
                <table width="520" cellspacing="0" cellpadding="0" border="0" bg-color="white" style="margin: 0 auto;">
                    <tbody>
                        <tr>
                            <td>
                              <table width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #183153;padding-top: 0; padding-bottom: 0; padding-left: 20px; padding-right: 20px;">
                                <tbody>
                                  <tr>
                                    <td valign="top">
                                      <p style="font-family:arial;margin: 0; color: #fff;padding-top: 38px; font-size: 14px;font-weight: 600;">{{Auth::user()->company_name}}</p>
                                      <p style="font-family:arial;margin: 0; color: #fff;font-size: 14px;font-weight: 600; padding-top: 5px;">{{Auth::user()->address}}</p>
                                    </td>
                                    <td style="height: 100px;background: #fff;width: 6px;">
                                    </td>
                                    <td style="display:flex; align-items:center;">
                                      
                                      <img src="../public/assets/app-assets/images/logo/logo-white.png" alt="logo" style="width: 66px;float: left;padding-left: 12px;padding-right: 12px;padding-top: 17px;">
                                      <p style="font-family:arial;color: #fff;margin: 0;font-size: 39px;font-weight: 600;padding-left: 10px;padding-top: 30px;">GesCle</p>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                        </tr>
                        <tr>
                          <td align="center">
                            <h3 style="margin: 0;padding-top: 45px;padding-bottom: 45px;color: #183153;font-family:arial;">LICENCE MANAGEMENT REPORT</h3>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p style="font-family:arial;color: #183153;margin: 0;font-size: 22px;font-weight: 600;border-bottom: 3px solid #fede00;padding-bottom: 4px;">REPORT SUMMARY</p>
                          </td>
                        </tr>
                        <tr>
                            <td style="font-family: Verdana, sans-serif;padding-top: 12px;" valign="top">
                              <table cellspacing="0" cellspadding="0" width="100%">
                                <tbody>
                                  <tr>
                                    <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;width: 170px;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">REPORT DATE</th>
                                    <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">REPORT NAME</th>
                                    <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">PREPARED BY</th>
                                  </tr>
                                  <tr>
                                    <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">{{date('d-F-Y')}}</td>
                                    <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">Export License List</td>
                                    <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">{{Auth::user()->name}}</td>
                                  </tr>
                              </tbody>
                              </table>
                          </td>
                        </tr>
                        <tr>
                          <td style="padding-top: 30px;">
                            <p style="font-family:arial;color: #183153;margin: 0;font-size: 22px;font-weight: 600;border-bottom: 3px solid #fede00;padding-bottom: 4px;">REPORT SUMMARY</p>
                          </td>
                        </tr>
                        <tr>
                          <td style="font-family: Verdana, sans-serif;padding-top: 12px;" valign="top">
                            <table cellspacing="0" cellspadding="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;width: 30px;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">S.NO</th>
                                        <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">TITLE</th>
                                        <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">REFFER TO</th>
                                        <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">Department</th>
                                        <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">KEY</th>
                                        <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">DATE OF ISSUE</th>
                                        <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">DATE OF EXPIRY</th>
                                        {{-- <th style="border:1px solid #fff;font-family:arial;font-size: 14px;font-weight: 600;text-align: left;background-color: #183153;color: #fff;padding-top: 5px;padding-bottom: 5px;padding-left: 5px;padding-right: 5px;">NO OF MANAGERS</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($licenses as $license)
                                    <tr>
                                        <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">{{$loop->index+1}}</td>
                                        <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">{{$license->title}}</td>
                                        <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">{{$license->get_license_user->name}}</td>
                                        <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">{{$license->department->name}}</td>
                                        <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">{{$license->key}}</td>
                                        <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">{{ \Carbon\carbon::createFromFormat('Y-m-d', $license->date_of_issue)->format('d-F-Y') }}</td>
                                        <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;">{{ \Carbon\carbon::createFromFormat('Y-m-d', $license->date_of_expiry)->format('d-F-Y') }}</td>
                                        {{-- <td style="border:1px solid #fff;background-color: #d9d9d9;padding-top: 12px;padding-bottom: 12px;padding-left: 12px;padding-right: 12px;"></td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
</body>
</html>