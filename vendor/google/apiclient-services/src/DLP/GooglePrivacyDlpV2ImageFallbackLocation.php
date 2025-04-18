<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\DLP;

class GooglePrivacyDlpV2ImageFallbackLocation extends \Google\Model
{
  protected $globalProcessingType = GooglePrivacyDlpV2GlobalProcessing::class;
  protected $globalProcessingDataType = '';
  protected $multiRegionProcessingType = GooglePrivacyDlpV2MultiRegionProcessing::class;
  protected $multiRegionProcessingDataType = '';

  /**
   * @param GooglePrivacyDlpV2GlobalProcessing
   */
  public function setGlobalProcessing(GooglePrivacyDlpV2GlobalProcessing $globalProcessing)
  {
    $this->globalProcessing = $globalProcessing;
  }
  /**
   * @return GooglePrivacyDlpV2GlobalProcessing
   */
  public function getGlobalProcessing()
  {
    return $this->globalProcessing;
  }
  /**
   * @param GooglePrivacyDlpV2MultiRegionProcessing
   */
  public function setMultiRegionProcessing(GooglePrivacyDlpV2MultiRegionProcessing $multiRegionProcessing)
  {
    $this->multiRegionProcessing = $multiRegionProcessing;
  }
  /**
   * @return GooglePrivacyDlpV2MultiRegionProcessing
   */
  public function getMultiRegionProcessing()
  {
    return $this->multiRegionProcessing;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2ImageFallbackLocation::class, 'Google_Service_DLP_GooglePrivacyDlpV2ImageFallbackLocation');
