<?php
/**
 * BigBlueButton open source conferencing system - https://www.bigbluebutton.org/.
 *
 * Copyright (c) 2016-2018 BigBlueButton Inc. and by respective authors (see below).
 *
 * This program is free software; you can redistribute it and/or modify it under the
 * terms of the GNU Lesser General Public License as published by the Free Software
 * Foundation; either version 3.0 of the License, or (at your option) any later
 * version.
 *
 * BigBlueButton is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License along
 * with BigBlueButton; if not, see <http://www.gnu.org/licenses/>.
 */
namespace BigBlueButton\Parameters;

/**
 * Class EndMeetingParameters.
 */
class EndMeetingParameters extends BaseParameters
{
    /**
     * @var string
     */
    protected $meetingID;

    /**
     * @var string
     */
    protected $password;

    /**
     * EndMeetingParameters constructor.
     *
     * @param $meetingId
     * @param $password
     */
    public function __construct($meetingID, $password)
    {
        $this->password  = $password;
        $this->meetingID = $meetingID;
    }

    /**
     * @deprecated use getMeetingID()
     * @return string
     */
    public function getMeetingId()
    {
        return $this->meetingID;
    }

    /**
     * @deprecated use setMeetingID()
     * @param string $meetingId
     *
     * @return CreateMeetingParameters
     */
    public function setMeetingId($meetingID)
    {
        $this->meetingID = $meetingID;

        return $this;
    }
}
